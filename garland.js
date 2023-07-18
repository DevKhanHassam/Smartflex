let video;
let poseNet;
let pose;
let skeleton;

let brain;

let Slider;

function preload(){
  pic=loadImage('garland pose.png')
}


function setup() {
  var canvas=createCanvas(640, 480);
  canvas.position(0, 52);

  Slider = createSlider(0, 100, 0);
  
  video = createCapture(VIDEO);
  video.hide();
  poseNet = ml5.poseNet(video, modelLoaded);
  poseNet.on('pose', gotPoses);

  let options = {
    inputs: 34,
    outputs: 1,
    task: 'regression',
    debug: true
  }
  brain = ml5.neuralNetwork(options);
  const modelInfo = {
    model: 'garlandmodel.json',
    metadata: 'garlandmodel_meta.json',
    weights: 'garlandmodel.weights.bin',
  };
  brain.load(modelInfo, brainLoaded);
}

function brainLoaded() {
  console.log('pose predicting ready!');
  predictColor();
}

function predictColor() {
  if (pose) {
    let inputs = [];
    for (let i = 0; i < pose.keypoints.length; i++) {
      let x = pose.keypoints[i].position.x;
      let y = pose.keypoints[i].position.y;
      inputs.push(x);
      inputs.push(y);
    }
    brain.predict(inputs, gotResult);
  } else {
    setTimeout(predictColor, 100);
  }
}

function gotResult(error, results) {
  console.log(results);
  let r = results[0].value;
 
  Slider.value(r);

  predictColor();
}






function gotPoses(poses) {
  // console.log(poses); 
  if (poses.length > 0) {
    pose = poses[0].pose;
    skeleton = poses[0].skeleton;
  }
}


function modelLoaded() {
  console.log('poseNet ready');
}

function draw() {
  push();
  translate(video.width, 0);
  scale(-1, 1);
  image(video, 0, 0, video.width, video.height);
  tint(255,110);
  image(pic,100,-25)
  noTint()

  if (pose) {
    for (let i = 0; i < skeleton.length; i++) {
      let a = skeleton[i][0];
      let b = skeleton[i][1];
      strokeWeight(2);
      stroke(0);

      line(a.position.x, a.position.y, b.position.x, b.position.y);
    }
    for (let i = 0; i < pose.keypoints.length; i++) {
      let x = pose.keypoints[i].position.x;
      let y = pose.keypoints[i].position.y;
      fill(0);
      stroke(255);
      ellipse(x, y, 16, 16);
    }
  }
  pop();

  let x = Slider.value();
  fill(255);
  textSize(36);
  text(x, 10, height - 10);

}