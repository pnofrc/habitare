<!DOCTYPE html>
<html>
<head>
  <title>Audio Recording with Gyroscope-controlled Delay Effect</title>
  <style>
    #gyroIndicator {
      width: 100px;
      height: 100px;
      border: 2px solid black;
      border-radius: 50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) rotate(0deg);
      transition: transform 100ms ease-out;
    }
  </style>
</head>
<body>
  <h1>Audio Recording with Gyroscope-controlled Delay Effect</h1>
  <button onclick="startRecording()">Start Recording</button>
  <button onclick="stopRecording()">Stop Recording</button>

  <div>
    <label for="gainSlider">Gain Value:</label>
    <input type="range" id="gainSlider" min="0" max="1" step="0.1" value="0.5" onchange="changeGainValue(this.value)">
  </div>

  <div id="gyroIndicator"></div>

  <script>
    // Initialize variables
let audioContext;
let mediaRecorder;
let chunks = [];
let delayNode;
let feedbackGainNode;
let gainNode;

// Function to start recording audio
function startRecording() {
  if (typeof DeviceOrientationEvent.requestPermission === 'function') {
    // Request permission to access gyroscope data on mobile devices
    DeviceOrientationEvent.requestPermission()
      .then(permissionState => {
        if (permissionState === 'granted') {
          startRecordingWithGyroscope();
        } else {
          console.error('Permission to access gyroscope denied.');
        }
      })
      .catch(console.error);
  } else {
    // For desktop browsers or older mobile browsers that don't support requestPermission
    startRecordingWithGyroscope();
  }
}

// Function to start recording audio and handle gyroscope data
function startRecordingWithGyroscope() {
  navigator.mediaDevices.getUserMedia({ audio: true })
    .then(function (stream) {
      // Create audio context
      audioContext = new (window.AudioContext || window.webkitAudioContext)();

      // Create media recorder
      mediaRecorder = new MediaRecorder(stream);

      // Create delay node
      delayNode = audioContext.createDelay(4);
      delayNode.delayTime.value = 1.5; // Initial delay time (in seconds)

      // Create feedback gain node
      feedbackGainNode = audioContext.createGain(2);
      feedbackGainNode.gain.value = 1; // Feedback gain value (between 0 and 1)

      // Create gain node
      gainNode = audioContext.createGain(2);
      gainNode.gain.value = 1; // Initial gain value (between 0 and 1)

      // Connect media stream to gain node
      const source = audioContext.createMediaStreamSource(stream);
      source.connect(gainNode);

      // Connect gain node to delay node
      gainNode.connect(delayNode);

      // Connect delay node to feedback gain node
      delayNode.connect(feedbackGainNode);

      // Connect feedback gain node to delay node (feedback loop)
      feedbackGainNode.connect(delayNode);

      // Connect feedback gain node to audio context destination
      feedbackGainNode.connect(audioContext.destination);

      // Connect delay node to audio context destination
      delayNode.connect(audioContext.destination);

      // Start recording
      mediaRecorder.start();

      // Event handler for data available
      mediaRecorder.addEventListener('dataavailable', function (event) {
        chunks.push(event.data);
      });

      // Event handler for recording stopped
      mediaRecorder.addEventListener('stop', function () {
        // Create a new audio element
        const audio = document.createElement('audio');

        // Combine recorded chunks into a single Blob
        const recordedBlob = new Blob(chunks, { type: 'audio/webm' });

        // Set audio source to the recorded Blob
        audio.src = URL.createObjectURL(recordedBlob);

        // Append audio element to the document
        document.body.appendChild(audio);
      });

       // Get the gyroIndicator element from the DOM
        const gyroIndicator = document.getElementById('gyroIndicator');

      // Event handler for gyroscope data
      window.addEventListener('deviceorientation', function (event) {
        // Map gyroscope data to delay time (adjust the mapping range as needed)
        const minDelay = 0.1; // Minimum delay time in seconds
        const maxDelay = 4.0; // Maximum delay time in seconds

        // Gyroscope data ranges from -180 to 180 degrees, normalize it to 0 to 1
        const normalizedValue = (event.beta + 180) / 360;

        // Map the normalized value to the delay range
        const mappedDelay = minDelay + normalizedValue * (maxDelay - minDelay);

        // Set the mapped delay time
        delayNode.delayTime.setValueAtTime(mappedDelay, audioContext.currentTime);
        
            // Update the gyroIndicator rotation
            const rotationDegrees = normalizedValue * 360;
            gyroIndicator.style.transform = `translate(-50%, -50%) rotate(${rotationDegrees}deg)`;
        });
    })
    .catch(function (error) {
      console.error('Error accessing microphone:', error);
    });
}

// Function to stop recording audio
function stopRecording() {
  mediaRecorder.stop();
}

// Function to change the gain value
function changeGainValue(value) {
  gainNode.gain.value = parseFloat(value);
}

// Function to change the feedback gain value
function changeFeedbackGainValue(value) {
  feedbackGainNode.gain.value = parseFloat(value);
}

  </script>
</body>
</html>
