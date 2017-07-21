<?php get_header(); ?>
<style media="screen">
body, button{
font-family: 'Helvetica Neue', arial, sans-serif;
color: white;
}

/**
* Form & Button Styles
*/

h4{
font-weight: 700;
margin-bottom: .5em;
}

label{
font-weight: 300;
}

button{
display: inline-block;
padding: .4em .8em;
background: #666;
border: 0;
margin: 0 .2em;
color: #ddd;
font-size: 16px;
font-weight: 300;
border-radius: .25em;
cursor: pointer;
}

button.active{
background: #68b8c4;
}

button:focus{
outline: 0 none;
}

button:first-of-type{
margin-left: 0;
}

button:last-of-type{
margin-right: 0;
}

button:focus{
outline: 0 none;
}

.controls{
background: #333;
padding: 2%;
}

fieldset{
display: inline-block;
vertical-align: top;
margin: 0 1em 0 0;
background: #444;
padding: .5em;
border-radius: 3px;
}

.checkbox{
display: block;
position: relative;
cursor: pointer;
margin-bottom: 8px;
}

.checkbox input[type="checkbox"]{
position: absolute;
display: block;
top: 0;
left: 0;
height: 100%;
width: 100%;
cursor: pointer;
margin: 0;
opacity: 0;
z-index: 1;
}

.checkbox label{
display: inline-block;
vertical-align: top;
text-align: left;
padding-left: 1.5em;
}

.checkbox label:before,
.checkbox label:after{
content: '';
display: block;
position: absolute;
}

.checkbox label:before{
left: 0;
top: 0;
width: 18px;
height: 18px;
margin-right: 10px;
background: #ddd;
border-radius: 3px;
}

.checkbox label:after{
content: '';
position: absolute;
top: 4px;
left: 4px;
width: 10px;
height: 10px;
border-radius: 2px;
background: #68b8c4;
opacity: 0;
pointer-events: none;
}

.checkbox input:checked ~ label:after{
opacity: 1;
}

.checkbox input:focus ~ label:before{
background: #eee;
}

/**
* Container/Target Styles
*/

.container{
padding: 2%;
background: #68b8c4;
text-align: justify;
}

.container .mix,
.container .gap{
width: 100px;
display: inline-block;
margin: 0 5%;
}

.container .mix{
width: 100px;
height: 100px;
margin: 5%;
background: white;
/*display: none;*/
}

.container .mix.green{
background: #a6e6a7;
}

.container .mix.blue{
background: #6bd2e8;
}

.container .mix.circle{
border-radius: 999px;
}

.container .mix.triangle{
width: 0;
height: 0;
border: 50px solid transparent;
border-top-color: #68b8c4;
border-left-color: #68b8c4;
}

</style>
	<main>
		<form class="controls" id="Filters">
  <!-- We can add an unlimited number of "filter groups" using the following format: -->

  <fieldset>
    <h4>Shapes</h4>
    <button class="filter" data-filter=".triangle">Triangle</button>
    <button class="filter" data-filter=".square">Square</button>
    <button class="filter" data-filter=".circle">Circle</button>
    <button class="filter active show-all" data-filter="">All</button>
  </fieldset>

  <fieldset>
    <h4>Colours</h4>

    <button class="filter" data-filter=".green">Green</button>
    <button class="filter" data-filter=".blue">Blue</button>
    <button class="filter" data-filter=".white">White</button>
    <button class="filter active show-all" data-filter="">All</button>
  </fieldset>

  <button id="Reset">Clear Filters</button>
</form>

		<div id="Container" class="container">
		  <div class="mix triangle white"></div>
		  <div class="mix square white"></div>
		  <div class="mix circle green"></div>
		  <div class="mix triangle blue"></div>
		  <div class="mix square white"></div>
		  <div class="mix circle blue"></div>
		  <div class="mix triangle green"></div>
		  <div class="mix square blue"></div>
		  <div class="mix circle white"></div>

		  <div class="gap"></div>
		  <div class="gap"></div>
		  <div class="gap"></div>
		  <div class="gap"></div>
		</div>

	</main>

<?php get_footer(); ?>
