<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" 
    crossorigin="anonymous">
    <style>
        .footer{
            text-align: center;
            font-family: Times-New-Roman;
            margin-top: 50px;
            color: black;
        }
        .card-deck{
            margin-top: 60px;
        }
        .article{
            box-shadow:0 0 5px rgba(0,0,0,.25);
 			padding:50px;
			border-radius:8px;
			margin:90px 0 30px 0;
			display:inline-block;
			width:60%;
			margin-left: 250px;
			color: white;
        }
        .form-group{
            color: black;
        }
        .p{
            text-align: justify;
            color: black;
        }
        .h3{
            color: black;
            text-align: center;
        }
        .navbar-nav{
        padding-right: 50px;
        }
        .nav-item{
            padding-right: 25px;
        }
        .bg-light{
            background-color: rgba(63, 31, 31, 0) !important ;
        }
        .bg-nontrans{
            background-color: rgba(255,255,255,255) !important ;
        }
        
        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }
        #sidebar {
            min-width: 250px;
            max-width: 250px;
        }
        #sidebar.active {
            margin-left: -250px;
        }
        .wrapper {
            display: flex;
            align-items: stretch;
        }
        #sidebar.active {
            margin-left: -250px;
        }
        #sidebar {
            min-width: 250px;
            max-width: 250px;
            min-height: 100vh;
        }
        a[data-toggle="collapse"] {
            position: relative;
        }
        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }
        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }
            #sidebar.active {
                margin-left: 0;
            }
        }
        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
        body {
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
        }
        p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #999;
        }
        a,
        a:hover,
        a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }
        #sidebar {
            /* don't forget to add all the previously mentioned styles here too */
            background: #525252;
            color: #fff;
            transition: all 0.3s;
        }
        #sidebar .sidebar-header {
            padding: 20px;
            background: #4d4d4d;
        }
        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #525252;
        }
        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }
        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }
        #sidebar ul li a:hover {
            color: #525252;
            background: #fff;
        }
        #sidebar ul li.active>a,
        a[aria-expanded="true"] {
            color: #fff;
            background: #6d7fcc;
        }
        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #6d7fcc;
        }
</style>