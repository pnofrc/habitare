// Initialize variables
let audioContext;
let mediaRecorder;
let chunks = [];
let delayNode;
let feedbackGainNode;
let gainNode;

// Function to start recording audio
function startRecording() {
  navigator.mediaDevices.getUserMedia({ audio: true })
    .then(function (stream) {
      // Create audio context
      audioContext = new (window.AudioContext || window.webkitAudioContext)();

      // Create media recorder
      mediaRecorder = new MediaRecorder(stream);

      // Create delay node
      delayNode = audioContext.createDelay(5);
      delayNode.delayTime.value = 0.5; // Initial delay time (in seconds)

      // Create feedback gain node
      feedbackGainNode = audioContext.createGain(2);
      feedbackGainNode.gain.value = 0.4; // Feedback gain value (between 0 and 0.9)

      // Create gain node
      gainNode = audioContext.createGain(2);
      gainNode.gain.value = 0.5; // Initial gain value (between 0 and 1)

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
    })
    .catch(function (error) {
      console.error('Error accessing microphone:', error);
    });
}

// Function to stop recording audio
function stopRecording() {
  mediaRecorder.stop();
}

// Function to change the delay time
function changeDelayTime(value) {
  delayNode.delayTime.value = parseFloat(value);
}

// Function to change the feedback value
function changeFeedback(value) {
  feedbackGainNode.gain.value = parseFloat(value);
}

// Function to change the gain value
function changeGain(value) {
  gainNode.gain.value = parseFloat(value);
}
