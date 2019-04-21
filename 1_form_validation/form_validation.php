<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<style>
			
			
			
			
			*{
				margin: 0;
				padding: 0;	
				box-sizing: border-box;
			}
			
			.header_matter,
			.wrap {
			  width: 1000px;
			  margin: auto;
			  padding: 5px;
			}

			.wrap {
			  height: 650px;
			  background: #fff;
			  margin-bottom: 25px;
			}
			body {
			  background: darkkhaki;
			}

			.footer,
			.header {
			  background: #ef0034;
			  flex-wrap: wrap;
			  margin-bottom: 25px;
			}
			  .header_matter {
			  	display: flex;
			  	align-items: baseline;
			  }
			.logo {
			  width: 20%;
			  /*! background: red; */
			  margin-right: 5%;
			}
			.menubar ul li {
			  float: left;
			  list-style-type: none;
			  padding: 5px;
			  text-align: ;
			}
			.menubar >ul {
			  text-align: right;
			  float: left;
			  width: 72%;
			}
			.menubar {
			  width: 80%;
			  /*! background: yellow; */
			}

			.menubar ul li a {
			  text-transform: uppercase;
			  text-decoration: none;
			  font-style: inherit;
			  font-family: inherit;
			  /*! background: red; */
			  color: #fff;
			  padding: 0 10px;
			  display: block;
			  visibility: bottom;
			font-family: 'Oswald', sans-serif;


			}
			
			img {
			  max-width: 100%;
			  height: auto;
			}

			.signup ul {
			    float: right;
		}
			.web_company h2,
			.web_company h2 a {
			  font-size: 14px;
			  text-align: center;
			  padding: 5px;
			  text-decoration: none;
			  text-align: center;
			  color: #fff;
			  /*! display: inline-block; */
			  font-weight: normal;
			  margin: auto;
			}


		
			
		</style>

	<title> form validation </title>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

</head>
<body>

	<div class="header">
		<div class="header_matter">
			<div class="logo">
				<a href="#"><img src="CT-LOGO.png"></a>
			</div>
			<div class="menubar">
				<ul>
					<li><a href="#">home</a></li>
					<li><a href="#">about</a></li>
					<li><a href="#">conact</a></li>
				</ul>
				<div class="signup">
					<ul>
						<li><a href="#">sign up</a></li>
						<li><a href="#">sign in</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="wrap">
		<div class="main_body">
			<!-- change here for any php mini project -->
			<form action="" action="POST">
				<input type="text" name="name" id=""> <br>
				<input type="submit" value="submit" name="submit">
			</form>


		</div>
	</div>

	<div class="footer">
		<div class="web_company">
			<h2> design and development by : <a href="http://webnewsdesign.com"> webnewsdesign.com </a> </h2>
		</div>
	</div>

</body>
</html>