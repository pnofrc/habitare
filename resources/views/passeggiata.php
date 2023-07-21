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
    <button onclick="stopRecording()">Stop</button>
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

  <script src="script.js"></script>
</body>
</html>
