<!DOCTYPE html>
 <html>

 <head>
     <title>Vue Experiment</title>
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <script src="http://localhost:8098"></script>
 </head>

 <body>

     <div id="app">
         	@yield("content")
     </div>

 	<script src="/js/app.js"></script>

 </body>

 </html>