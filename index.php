<?php 
$title = "Home";
$index = 0;
include "includes/01_header.php";?>

<div id="gradient" class="vh-100 d-flex justify-content-center align-items-center ">
			<h1>Who even is Gabriel Pierce?</h1>
		</div>
        <div class="container">
		
        <div class="clearfix">
            <img src="images/face3.jpg" class="col-md-3 float-md-start m-3 ms-md-3 img-thumbnail" alt="Gabriel Pierce smiling.">
            <p>
                I, Gabriel Pierce, have the privilege to call myself by many titles. A father, a husband, a Christian, but most know me by my work title, a software developer. I have many skills, and know many languages, which can be seen on my RESUMELINK. But in school I majored in Web Development.
            </p>
            <p>
                I have a passion for pleasing people. So, Client-Centric development is my go-to. And a proven Agile philosophy keeps transparency between me and my clients. I love it when I, a customer, and or a friend loves their product. My goal is to make solutions that not only solve a business problem, but also are pleasant to be around.
            </p>
            <p>
                I started developing software when I was 16, using scripting languages that would help me play video games. I didn’t actively pursue coding for a long while, not because of a lack of interest, but because I thought it was something that I could never do professionally, due to my lack of professional coding knowledge. Little did I know then, my goal wasn’t too far from what I was already doing.
            </p>
            <p>
                Flash forward 5 years, me and my wife found out that she was pregnant. At the time, I just stopped working as a mentor in the AmeriCorps program and picked up what I could as a google sheet developer. And I wasn’t making enough money to support a family of three. And so, it was obvious that a change was needed. And it needed to happen fast, so I attended the Ogden-Weber Technical College, in Ogden Utah. I chose this school because they offered self-paced coursework and had a wonderful job placement percentage.
            </p>
            <p>
                I flew through the courses, and learned as much as I could, and earned my degree at record breaking speed. And achieved a 4.0/4.0 on my GPA. But I was disappointed, as a lot of entry-level positions required a bachelor’s degree. And often wouldn’t even consider my application.
            </p>
            <div class="row">
            <iframe class="col-lg-6" width="100%" height="355" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRdVfkQ4qHlTauPhj7ugrnsDJWF-GeP-0BWXKk1mBvAjMLbtdBO5iiUCzoLWx1dNCuWOdhgbsPxoW4-/pubchart?oid=839605300&amp;format=interactive"></iframe>
            <iframe class="col-lg-6" width="100%" height="355" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRdVfkQ4qHlTauPhj7ugrnsDJWF-GeP-0BWXKk1mBvAjMLbtdBO5iiUCzoLWx1dNCuWOdhgbsPxoW4-/pubchart?oid=1180448968&amp;format=interactive"></iframe>
            </div>
            <p>
                I got a lucky break, I got hired to work as a contractor at HILL AFB. Unfortunately, this wasn’t a software position like I would have hoped. But it was working with computers. I received a Secret Clearance. And I continue to find and grab great opportunities that work with data, and computer science.
            </p>
            <p>
                I know what you’re thinking, “So, you never have been hired as a software developer?”, and yes that is technically true. But, all this time, since I got out of school, I have been running my own business. I hired myself to satisfy clients and meet deadlines. So yes, no company has hired me (yet) to do software development. But I have been working as a software developer for [years, months, days].
            </p>
            <p>
                So don’t just take my word for it, here is a quote I have from one of my long running clients.
            </p>
        </div>
        <figure class="shadow p-3 mb-5 bg-body text-dark rounded">
            <blockquote class="blockquote text-center">
                <p>
                    "Gabriel Pierce was instrumental in creating and improving methods of tracking student progress and implementing the program that has benefited our program statewide. Because of his efforts, our program will be able to gather data more accurately and efficiently which aids us in meeting our mission goals to help students to succeed. 
                </p>
              
                <p>
                    Not only has he excelled in coordinating the mentoring program and developing efficient processes, he also shared his skills with others by serving in the community.  He has shared ideas for program improvement, helped train newer members, and has been thorough in his responsibilities.
                </p>
              
                <p>
                    We highly recommend Gabriel Pierce to you and know that he will be a valuable asset to your team."
                </p>
            </blockquote>
            <figcaption class="blockquote-footer">
                Kenice Whitaker, Assistant Director, AmeriCorps Education Initiative of Utah in <cite title="Source Title">Letter of Recommendation for Gabriel Pierce.</cite>
            </figcaption>
          </figure>
          <p>
                So, who even is Gabriel Pierce? He is a software developer. And, most likely. The architect to your next business solution.
          </p>
        </div>
<?php
include "includes/02_footer.php";
include "includes/03_script.php";
?>
<script>
		// Can't take credit for this one, I saught online for hours for an easy way to do this, this guy is a genius!
		// https://codepen.io/quasimondo/pen/lDdrF
		var colors = new Array(
            [0, 100, 100], // dark cyan
            [135, 0, 100], // purple
			[0, 107, 200], // dark blue
			[135, 0, 100], // purple
            );

		var step = 0;
        var angle = 0;
		// color table indices for: 
		// current color left
		// next color left
		// current color right
		// next color right
		var colorIndices = [0, 1, 2, 3];

		//transition speed
		var gradientSpeed = 0.002; // 0.002

		function updateGradient() {

			if ($ === undefined) return; // Check for Jquery

			var c0_0 = colors[colorIndices[0]];
			var c0_1 = colors[colorIndices[1]];
			var c1_0 = colors[colorIndices[2]];
			var c1_1 = colors[colorIndices[3]];

			var istep = 1 - step;
			var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
			var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
			var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
			var color1 = "rgb(" + r1 + "," + g1 + "," + b1 + ")";

			var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
			var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
			var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
			var color2 = "rgb(" + r2 + "," + g2 + "," + b2 + ")";

			$('#gradient').css({
				background: "linear-gradient(#212529,"+color1+", "+color2+",#404447)"
			});

			step += gradientSpeed;
			if (step >= 1) {
				step %= 1;
				colorIndices[0] = colorIndices[1];
				colorIndices[2] = colorIndices[3];

				//pick two new target color indices
				//do not pick the same as the current one
				colorIndices[1] = (colorIndices[1] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;
				colorIndices[3] = (colorIndices[3] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;

			}
		}
		setInterval(updateGradient, 10);
		
	</script>
<?php
include "includes/04_end_html.php";
?>