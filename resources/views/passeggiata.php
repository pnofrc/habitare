<!DOCTYPE html>
<html>
<head>
  <title>Gyroscope Test</title>
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
  <h1>Gyroscope Test</h1>

  <div id="gyroIndicator"></div>

  <script>
    // Function to update the gyroIndicator rotation
    function updateGyroIndicator(event) {
      const gyroIndicator = document.getElementById('gyroIndicator');

      // Map gyroscope data to rotation (adjust the mapping range as needed)
      const normalizedValue = (event.beta + 180) / 360;
      const rotationDegrees = normalizedValue * 360;

      gyroIndicator.style.transform = `translate(-50%, -50%) rotate(${rotationDegrees}deg)`;
    }

    // Event handler for gyroscope data
    window.addEventListener('deviceorientation', updateGyroIndicator);

    // Request permission to access gyroscope data on mobile devices
    if (typeof DeviceOrientationEvent.requestPermission === 'function') {
      DeviceOrientationEvent.requestPermission()
        .then(permissionState => {
          if (permissionState === 'granted') {
            console.log('Gyroscope access granted.');
          } else {
            console.error('Permission to access gyroscope denied.');
          }
        })
        .catch(console.error);
    }
  </script>
</body>
</html>
