<head>
  
<style>


            /*QA style start */


            #QA {
            margin-bottom: 100px;
            }

            #qaHeader {
            display: flex;
            justify-content: center;
            flex-direction: column;
            margin-bottom: 40px;
            align-content: center;
            align-items: center;
            }

            #qaHeader h1,
            #qaHeader p{
            text-align: center;
            }

            #qaHeader h1 {
            font-size: 60px;
            margin-bottom: -10px;
            }

            .head {
            display: flex;
            gap: 5px;
            align-items: center;
            justify-content: flex-start;
            background: #00A3FF;
            width: fit-content;
            padding: 0px 152px;
            padding-left: 0px;
            border-radius: 25px;
            z-index: 2; /* Adjusted z-index value */
            position: relative; /* Added position property */
            cursor:default;
            cursor: pointer;
            }

            .head p {
            color: white;
            }

            .head img {
            transform: rotate(0deg);
            }

            .body {
            background: #D9D9D9;
            width: fit-content;
            border-radius: 20px;
            margin-left: 2.5em;
            margin-top: -30px;
            z-index: 1;
            position: relative; 
            }

            .q{
            height: 52px;
            transition: height 400ms linear;
            }


            .body p {
            width: 550px;
            padding: 30px;
            color: #00A3FF;
            }




            @keyframes scale-up-ver-top {
            0% {
            transform: scaleY(0.4);
            transform-origin: 100% 0%;
            }
            100% {
            transform: scaleY(1);
            transform-origin: 100% 0%;
            }
            }

            @keyframes scale-up-ver-top-reverse {
            0% {
            transform: scaleY(1);
            transform-origin: 100% 0%;
            }
            100% {
            transform: scaleY(0);
            transform-origin: 0% 0%;
            }
            }

            .icon {
            transition: transform 0.4s ease;
            margin-left: 6px;
            }

            #Qs {
            display: flex;
            flex-direction: column;
            }

            .q {
            margin: 3px 0px;
            align-self: center;
            }
            /* QA style end*/

</style>

</head>
<body>
<div id="QA">

  <div id="qaHeader">
      <h1>Q&A</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. <br>
      Aliquam in hendrerit urna.</p>
  </div>

  <div id="Qs">

      <div class="q" id="q1">
          <div class="head" id="q01">
              <img src="../pics/plus01.png" alt="+" height="30px" width="30px" class="icon" id="icon01">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut e t massa mi.</p>
          </div>
    
          <div id="a01" class="body" style="animation: 0.4s ease-in-out 0s 1 normal both running scale-up-ver-top-reverse; display: none;">
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut e t massa mi.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut e t massa mi.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut e t massa mi.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut e t massa mi.
              </p>
          </div>
      </div>

      <div class="q" id="q2">
          <div class="head" id="q02">
              <img src="../pics/plus01.png" alt="+" height="30px" width="30px" id="icon02" class="icon">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut e t massa mi.</p>
          </div>
  
          <div id="a02" class="body" style="animation: 0.4s ease-in-out 0s 1 normal both running scale-up-ver-top-reverse; display: none;">
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut e t massa mi.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut e t massa mi.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut e t massa mi.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut e t massa mi.
              </p>
          </div>
      </div>

      <div class="q" id="q3"> 
          <div class="head" id="q03">
              <img src="../pics/plus01.png" alt="+" height="30px" width="30px" id="icon03" class="icon">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut e t massa mi.</p>
          </div>
  
          <div id="a03" class="body" style="animation: 0.4s ease-in-out 0s 1 normal both running scale-up-ver-top-reverse; display: none;">
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut e t massa mi.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut e t massa mi.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut e t massa mi.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut e t massa mi.
              </p>
          </div>
      </div>

      <div class="q" id="q4">
          <div class="head" id="q04">
              <img src="../pics/plus01.png" alt="+" height="30px" width="30px" id="icon04" class="icon">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut e t massa mi.</p>
          </div>
      
          <div id="a04" class="body" style="animation: 0.4s ease-in-out 0s 1 normal both running scale-up-ver-top-reverse; display: none;">
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut e t massa mi.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut e t massa mi.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut e t massa mi.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut e t massa mi.
              </p>
          </div>
      </div>
  </div>
</div>

</body>

<script defer>
  /*QA */

      
  document.getElementById('q01').addEventListener('click', function() {
          var div2 = document.getElementById('a01');
          var icon = document.getElementById('icon01');
          var q = document.getElementById('q1');
          if (div2.style.display == 'none') {
            div2.style.display = 'block';
            div2.style.animation = 'scale-up-ver-top 0.4s linear';
            icon.style.transform = 'rotate(45deg)';
            q.style.height='194px';
          } else {
            q.style.height='52px';
            div2.style.animation = 'scale-up-ver-top-reverse 0.4s linear';
            icon.style.transform = 'rotate(0deg)';
            setTimeout(() => {div2.style.display = 'none'}, 400); // Delay the hiding after animation
          }
        });
        
        document.getElementById('q02').addEventListener('click', function() {
          var div2 = document.getElementById('a02');
          var icon = document.getElementById('icon02');
          var q = document.getElementById('q2');
          if (div2.style.display == 'none') {
            div2.style.display = 'block';
            div2.style.animation = 'scale-up-ver-top 0.4s linear';
            icon.style.transform = 'rotate(45deg)';
            q.style.height='194px';
          } else {
            q.style.height='52px';
            div2.style.animation = 'scale-up-ver-top-reverse 0.4s linear';
            icon.style.transform = 'rotate(0deg)';
            setTimeout(() => {div2.style.display = 'none'}, 400); // Delay the hiding after animation
          }
        });
        
        document.getElementById('q03').addEventListener('click', function() {
          var div2 = document.getElementById('a03');
          var icon = document.getElementById('icon03');
          var q = document.getElementById('q3');
          if (div2.style.display == 'none') {
            div2.style.display = 'block';
            div2.style.animation = 'scale-up-ver-top 0.4s linear';
            icon.style.transform = 'rotate(45deg)';
            q.style.height='194px';
          } else {
            q.style.height='52px';
            div2.style.animation = 'scale-up-ver-top-reverse 0.4s linear';
            icon.style.transform = 'rotate(0deg)';
            setTimeout(() => {div2.style.display = 'none'}, 400); // Delay the hiding after animation
          }
        });
        
        
        document.getElementById('q04').addEventListener('click', function() {
          var div2 = document.getElementById('a04');
          var icon = document.getElementById('icon04');
          var q = document.getElementById('q4');
          if (div2.style.display == 'none') {
            div2.style.display = 'block';
            div2.style.animation = 'scale-up-ver-top 0.4s linear';
            icon.style.transform = 'rotate(45deg)';
            q.style.height='194px';
          } else {
            q.style.height='52px';
            div2.style.animation = 'scale-up-ver-top-reverse 0.4s linear';
            icon.style.transform = 'rotate(0deg)';
            setTimeout(() => {div2.style.display = 'none'}, 400); // Delay the hiding after animation
          }
        });
        
        
        
        
     
</script>

