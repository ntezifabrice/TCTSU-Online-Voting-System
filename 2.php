<h1>CSS3 Checkbox Styles</h1>
<em>Click any button below</em>


<div class="ondisplay">
  
  <section title=".slideOne">
    <!-- .slideOne -->
    <div class="slideOne">  
      <input type="checkbox" value="None" id="slideOne" name="check" checked />
      <label for="slideOne"></label>
    </div>
    <!-- end .slideOne -->
  </section>

  <section title=".slideTwo">
    <!-- .slideTwo -->
    <div class="slideTwo">  
      <input type="checkbox" value="None" id="slideTwo" name="check" checked />
      <label for="slideTwo"></label>
    </div>
    <!-- end .slideTwo -->
  </section>
  
  <section title=".slideThree">
    <!-- .slideThree -->
    <div class="slideThree">  
      <input type="checkbox" value="None" id="slideThree" name="check" checked />
      <label for="slideThree"></label>
    </div>
    <!-- end .slideThree -->
  </section>
  
  <section title=".roundedOne">
    <!-- .roundedOne -->
    <div class="roundedOne">
      <input type="checkbox" value="None" id="roundedOne" name="check" checked />
      <label for="roundedOne"></label>
    </div>
    <!-- end .roundedOne -->
  </section>
  
  <section title=".roundedTwo">
    <!-- .roundedTwo -->
    <div class="roundedTwo">
      <input type="checkbox" value="None" id="roundedTwo" name="check" checked />
      <label for="roundedTwo"></label>
    </div>
    <!-- end .roundedTwo -->
  </section>
  
  <section title=".squaredOne">
    <!-- .squaredOne -->
    <div class="squaredOne">
      <input type="checkbox" value="None" id="squaredOne" name="check" checked />
      <label for="squaredOne"></label>
    </div>
    <!-- end .squaredOne -->
  </section>
  
  <section title=".squaredTwo">
    <!-- .squaredTwo -->
    <div class="squaredTwo">
      <input type="checkbox" value="None" id="squaredTwo" name="check" checked />
      <label for="squaredTwo"></label>
    </div>
    <!-- end .squaredTwo -->
  </section>
  
  <section title=".squaredThree">
    <!-- .squaredThree -->
    <div class="squaredThree">
      <input type="checkbox" value="None" id="squaredThree" name="check" checked />
      <label for="squaredThree"></label>
    </div>
    <!-- end .squaredThree -->
  </section>
  
  <section title=".squaredFour">
    <!-- .squaredFour -->
    <div class="squaredFour">
      <input type="checkbox" value="None" id="squaredFour" name="check" checked />
      <label for="squaredFour"></label>
    </div>
    <!-- end .squaredFour -->
  </section>
  
</div>
<style>
@import "compass/css3";

/* $activeColor: #c0392b; //red */
$activeColor: #27ae60; //green
$darkenColor: darken($activeColor, 20%);
/* $background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/13460/dark_wall.png'); */
$background: #3498db;

/* .slideOne */
.slideOne {
  width: 50px;
  height: 10px;
  background: #333;
  margin: 20px auto;
  position: relative;
  border-radius: 50px;
  box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.5), 0px 1px 0px rgba(255, 255, 255, 0.2);
  label {
    display: block;
    width: 16px;
    height: 16px;
    position: absolute;
    top: -3px;
    left: -3px;
    cursor: pointer;
    background: #fcfff4;
    background: linear-gradient(to bottom, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
    border-radius: 50px;
    box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.3);
    transition: all 0.4s ease;
  }
  input[type=checkbox] {
    visibility: hidden;
    &:checked + label {
      left: 37px;
    }  
  }
}
/* end .slideOne */


/* .slideTwo */
.slideTwo {
  width: 80px;
  height: 30px;
  background: #333;
  margin: 20px auto;
  position: relative;
  border-radius: 50px;
  box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.5), 0px 1px 0px rgba(255, 255, 255, 0.2);
  &:after {
    content: '';
    position: absolute;
    top: 14px;
    left: 14px;
    height: 2px;
    width: 52px;
    background: #111;
    border-radius: 50px;
    box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.5), 0px 1px 0px rgba(255, 255, 255, 0.2);
  }
  label {
    display: block;
    width: 22px;
    height: 22px;
    cursor: pointer;
    position: absolute;
    top: 4px;
    z-index: 1;
    left: 4px;
    background: #fcfff4;
    border-radius: 50px;
    transition: all 0.4s ease;
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
    background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
    &:after {
      content: '';
      width: 10px;
      height: 10px;
      position: absolute;
      top: 6px;
      left: 6px;
      background: #333;
      border-radius: 50px;
      box-shadow: inset 0px 1px 1px rgba(0,0,0,1), 0px 1px 0px rgba(255,255,255,0.9);
    }
  }
  input[type=checkbox] {
    visibility: hidden;
    &:checked + label {
      left: 54px;
      &:after {
        background: $activeColor; /*activeColor*/
      }
    }
  }    
}
/* end .slideTwo */


/* .slideThree */
.slideThree {
  width: 80px;
  height: 26px;
  background: #333;
  margin: 20px auto;
  position: relative;
  border-radius: 50px;
  box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
  &:after {
    content: 'OFF';
    color: #000;
    position: absolute;
    right: 10px;
    z-index: 0;
    font: 12px/26px Arial, sans-serif;
    font-weight: bold;
    text-shadow: 1px 1px 0px rgba(255,255,255,.15);
  }
  &:before {
    content: 'ON';
    color: $activeColor;
    position: absolute;
    left: 10px;
    z-index: 0;
    font: 12px/26px Arial, sans-serif;
    font-weight: bold;
  }
  label {
    display: block;
    width: 34px;
    height: 20px;
    cursor: pointer;
    position: absolute;
    top: 3px;
    left: 3px;
    z-index: 1;
    background: #fcfff4;
    background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
    border-radius: 50px;
    transition: all 0.4s ease;
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
  }
  input[type=checkbox] {
    visibility: hidden;
    &:checked + label {
      left: 43px;
    }
  }    
}
/* end .slideThree */


/* .roundedOne */
.roundedOne {
  width: 28px;
  height: 28px;
  position: relative;
  margin: 20px auto;
  background: #fcfff4;
  background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
  border-radius: 50px;
  box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0,0,0,0.5);
  label {
    width: 20px;
    height: 20px;
    cursor: pointer;
    position: absolute;
    left: 4px;
    top: 4px;
    background: linear-gradient(top, #222 0%, #45484d 100%);
    border-radius: 50px;
    box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,1);
    &:after {
      content: '';
      width: 16px;
      height: 16px;
      position: absolute;
      top: 2px;
      left: 2px;
      background: $activeColor;
      background: linear-gradient(top, $activeColor 0%, $darkenColor 100%);
      opacity: 0;
      border-radius: 50px;
      box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0,0,0,0.5);
    }
    &:hover::after {
      opacity: 0.3;
    }
  }
  input[type=checkbox] {
    visibility: hidden;
    &:checked + label:after {
      opacity: 1;
    }
  }    
}
/* end .roundedOne */


/* .roundedTwo */
.roundedTwo {
  width: 28px;
  height: 28px;
  position: relative;
  margin: 20px auto;
  background: #fcfff4;
  background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
  border-radius: 50px;
  box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0,0,0,0.5);
  label {
    width: 20px;
    height: 20px;
    position: absolute;
    top: 4px;
    left: 4px;
    cursor: pointer;
    background: linear-gradient(top, #222 0%, #45484d 100%);
    border-radius: 50px;
    box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,1);
    &:after {
      content: '';
      width: 9px;
      height: 5px;
      position: absolute;
      top: 5px;
      left: 4px;
      border: 3px solid #fcfff4;
      border-top: none;
      border-right: none;
      background: transparent;
      opacity: 0;
      transform: rotate(-45deg);
    }
    &:hover::after {
      opacity: 0.3;
    }
  }
  input[type=checkbox] {
    visibility: hidden;
    &:checked + label:after {
      opacity: 1;
    } 
  }   
}
/* end .roundedTwo */



/* .squaredOne */
.squaredOne {
  width: 28px;
  height: 28px;
  position: relative;
  margin: 20px auto;
  background: #fcfff4;
  background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
  box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0,0,0,0.5);
  label {
    width: 20px;
    height: 20px;
    position: absolute;
    top: 4px;
    left: 4px;
    cursor: pointer;
    background: linear-gradient(top, #222 0%, #45484d 100%);
    box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,1);
    &:after {
      content: '';
      width: 16px;
      height: 16px;
      position: absolute;
      top: 2px;
      left: 2px;
      background: $activeColor;
      background: linear-gradient(top, $activeColor 0%, $darkenColor 100%);
      box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0,0,0,0.5);
      opacity: 0;
    }
    &:hover::after {
      opacity: 0.3;
    }
  }
  input[type=checkbox] {
    visibility: hidden;
    &:checked + label:after {
      opacity: 1;
    }   
  } 
}
/* end .squaredOne */


/* .squaredTwo */
.squaredTwo {
  width: 28px;
  height: 28px;
  position: relative;
  margin: 20px auto;
  background: #fcfff4;
  background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
  box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0,0,0,0.5);
  label {
    width: 20px;
    height: 20px;
    cursor: pointer;
    position: absolute;
    left: 4px;
    top: 4px;
    background: linear-gradient(top, #222 0%, #45484d 100%);
    box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,1);
    &:after {
      content: '';
      width: 9px;
      height: 5px;
      position: absolute;
      top: 4px;
      left: 4px;
      border: 3px solid #fcfff4;
      border-top: none;
      border-right: none;
      background: transparent;
      opacity: 0;
      transform: rotate(-45deg);
    }
    &:hover::after {
      opacity: 0.3;
    }
  }
  input[type=checkbox] {
    visibility: hidden;
    &:checked + label:after {
      opacity: 1;
    }    
  }
}
/* end .squaredTwo */


/* .squaredThree */
.squaredThree {
  width: 20px;
  position: relative;
  margin: 20px auto;
  label {
    width: 20px;
    height: 20px;
    cursor: pointer;
    position: absolute;
    top: 0;
    left: 0;
    background: linear-gradient(top, #222 0%, #45484d 100%);
    border-radius: 4px;
    box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,.4);
    &:after {
      content: '';
      width: 9px;
      height: 5px;
      position: absolute;
      top: 4px;
      left: 4px;
      border: 3px solid #fcfff4;
      border-top: none;
      border-right: none;
      background: transparent;
      opacity: 0;
      transform: rotate(-45deg);
    }
    &:hover::after {
      opacity: 0.3;
    }
  }
  input[type=checkbox] {
    visibility: hidden;
    &:checked + label:after {
      opacity: 1;
    }    
  }
}
/* end .squaredThree */


/* .squaredFour */
.squaredFour {
  width: 20px;
  position: relative;
  margin: 20px auto;
  label {
    width: 20px;
    height: 20px;
    cursor: pointer;
    position: absolute;
    top: 0;
    left: 0;
    background: #fcfff4;
    background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
    border-radius: 4px;
    box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0,0,0,0.5);
    &:after {
      content: '';
      width: 9px;
      height: 5px;
      position: absolute;
      top: 4px;
      left: 4px;
      border: 3px solid #333;
      border-top: none;
      border-right: none;
      background: transparent;
      opacity: 0;
      transform: rotate(-45deg);
    }
    &:hover::after {
      opacity: 0.5;
    }
  }
  input[type=checkbox] {
    visibility: hidden;
    &:checked + label:after {
      opacity: 1;
    }
  }    
}
/* end .squaredFour */





// ** Page Styling - Nothing to do with the Radio Buttons **
*{box-sizing: border-box;}
body {
  background: $background;
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  h1, h2, em {
    color: #eee;
    font-size: 30px;
    text-align: center;
    margin: 20px 0 0 0;
    -webkit-font-smoothing: antialiased;
    text-shadow: 0px 1px #000;
  }
  em{
    font-size: 14px;
    text-align: center;
    display: block;
    margin-bottom: 50px;
  }
  .ondisplay{
    text-align:center;
    padding:20px 0;
    section{
      width:100px;
      height:100px;
      background: #555;
      display:inline-block;
      position: relative;
      text-align: center;
      margin-top:5px;
      border: 1px solid gray;
      border-radius: 5px;
      box-shadow:
        0 1px 4px rgba(0, 0, 0, 0.3), 
        0 0 40px rgba(0, 0, 0, 0.1) inset;
      &:after{
/*         visibility: hidden; */
        content:attr(title);
        position: absolute;
        width: 100%;
        left: 0;
        bottom: 3px;
        color: #fff;
        font-size: 12px;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        text-shadow: 0px 1px #000; 
      }
    }
  }
}
</style>