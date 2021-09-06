<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>TNQ - ISA</title>
  	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400&family=Source+Sans+Pro:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
	<div class="top-banner">
		<div class="container">
			<div class="row top-header">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<img src="images/logo.png"  class="img-responsive"/>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<button>SUBMIT YOUR ENTRY</button>
				</div>
			</div>
			<h1>The Inspiring Science Award 2022<br> is open for entries and will close<br> on the 15th of october 2021</h1>
			<p>500 entries received</p>
			<button>VIEW ELIGIBILITY CRITERIA</button>
		</div>
	</div>
	<hr>
	<div class="container">
		<div class="timer">
			<h4>Time Left for Submission</h4>
  				<div id="countdown">
   					<ul>
      					<li><span id="days"></span>days</li>
      					<li><span id="hours"></span>Hours</li>
      					<li><span id="minutes"></span>Minutes</li>
      					<li><span id="seconds"></span>Seconds</li>
    				</ul>
  				</div>
  				<div id="content" class="emoji">
    				<span>🥳</span>
    				<span>🎉</span>
    				<span>🎂</span>
  				</div>
		</div>
	</div>
	<div class="scroll-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 side">
					<img src="images/scroll-1.png" class="img-responsive" />
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 side">
					<div class="right">
						<div class="line">
							<h2>The Inspiring Science Award<br> is for the best published<br> Life Sciences paper by a<br> student from India.</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="history">
		<div class="container">
			<hr>
			<h4>History & Purpose</h4>
			<hr>
		</div>
	</div>
	<hr>
	<div class="container">
		<div class="history-btm">
			<h3>The jury and the sponsors aim to recognise and reward quality science, inspire scholarship, and support researchers to pursue their passion in the Life Sciences by selecting the best published scientific paper in the Life Sciences from India each year.</h3>
			<p>The Inspiring Science Award was announced in January 2016, at The TNQ Distinguished Lectures in the Life Sciences in Bengaluru.  At the launch of the award by Dr Emilie Marcus, ex CEO, Cell Press, and Editor-in-Chief said “Building on the successful tradition of the lectureship in inspiring students to pursue their passion with careers in scientific research, we are creating The Inspiring Science Award in association with the lectures. <br><br>

			The idea for this award was brought forth to us by Professor Anuranjan Anand of JNCASR and we would like to express our thanks and appreciation to him for helping extend the impact of the lecture series in promoting young Indian scientists."
			</p>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<h2>5</h2>
					<h6>Winners of the<br> Inspiring Science award</h6>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<h2>2500</h2>
					<h6>Entries Since 2017</h6>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<h2>200</h2>
					<h6>Research institutions<br> represented</h6>
				</div>
			</div>
			<button>VIEW ELIGIBILITY CRITERIA</button>
		</div>
	</div>
	<div class="prize">
		<div class="container">
			<hr>
			<h4>Prize</h4>
			<hr>
			<p>Eight papers are shortlisted by the jury for the top pick. All finalists receive a Mac laptop and<br> a citation. The winner receives the ISA medal, a citation, and a travel fellowship to a<br> conference of their choosing anywhere in the world. During the pandemic, and while travel<br> is restricted, the winner receives a cash award of INR 2,00,000.</p>
		</div>
	</div>
	<div class="eligibility">
		<div class="container">
			<hr>
			<h4>Eligibility for 2022</h4>
			<hr>
		</div>
	</div>


<script id="rendered-js" >
(function () {
  const second = 1000,
  minute = second * 60,
  hour = minute * 60,
  day = hour * 24;

  let birthday = "Sep 30, 2021 00:00:00",
  countDown = new Date(birthday).getTime(),
  x = setInterval(function () {

    let now = new Date().getTime(),
    distance = countDown - now;

    document.getElementById("days").innerText = Math.floor(distance / day),
    document.getElementById("hours").innerText = Math.floor(distance % day / hour),
    document.getElementById("minutes").innerText = Math.floor(distance % hour / minute),
    document.getElementById("seconds").innerText = Math.floor(distance % minute / second);

    //do something later when date is reached
    if (distance < 0) {
      let headline = document.getElementById("headline"),
      countdown = document.getElementById("countdown"),
      content = document.getElementById("content");

      headline.innerText = "It's my birthday!";
      countdown.style.display = "none";
      content.style.display = "block";

      clearInterval(x);
    }
    //seconds
  }, 0);
})();
//# sourceURL=pen.js
    </script>


</body>
</html>