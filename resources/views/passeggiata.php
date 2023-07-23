<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style>
    body{
      width: 100%;
      height: 100vh;
      background: black;
      color: white;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
    }

    .flex{
      display: flex;
      width: 100%;
      gap: 10px;
      justify-content: center;
      align-items: center;
    }

    .column{
      flex-direction: column;
    }
  </style>
</head>
<body>
  <div class=" flex column">
    <button onclick="startRecording()">Inizia</button>
    <!-- <button onclick="stopRecording()">Stop</button> -->
  </div>

  <div class="flex column">

    <div class="flex column">
      <label for="delaySlider">Delay Time (seconds):</label>
      <input type="range" id="delaySlider" min="0.1" max="4" step="0.1" value="0.5" onchange="changeDelayTime(this.value)">
    </div>

    <div class="flex column">
      <label for="feedbackSlider">Feedback:</label>
      <input type="range" id="feedbackSlider" min="0" max="2" step="0.1" value="0.4" onchange="changeFeedback(this.value)">
    </div>

    <div class="flex column">
      <label for="gainSlider">Gain:</label>
      <input type="range" id="gainSlider" min="0" max="2" step="0.1" value="0.5" onchange="changeGain(this.value)">
    </div>

</div>

<!-- <input type="range" id="gyroSlider" min="0" max="100" value="50" /> -->
  <script>
    if (window.DeviceOrientationEvent) {
      window.addEventListener('deviceorientation', handleOrientation);
    } else {
      console.log('DeviceOrientationEvent is not supported on this device.');
    }

    function handleOrientation(event) {
      // Assuming you want to use the device's rotation around the X-axis to control the slider:
      var xRotation = event.beta; // Range: -180 to 180

      // Map the gyroscope X-axis rotation range (-180 to 180) to the slider range (0 to 100):
      var mappedValue = (xRotation + 180) * (100 / 360);

      // Clamp the value to ensure it stays within the slider's range:
      var clampedValue = Math.min(100, Math.max(0, mappedValue));

      // Update the slider position:
      document.getElementById('delaySlider').value = clampedValue/60;
    }
  </script>

  <script src="script.js"></script>
</body>
</html>
