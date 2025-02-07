<html>
   <head>
      <title>USCMS Anonymous Message Box</title>
      <style>
body
{
   font-family: arial;
   height: 97%;
}

h1
{
   text-align: center;
   margin-top: 1em;
}

a
{
   text-decoration: none;
   transition: 0.5s ease;
   color: #55D;
}

a:hover
{
   color: #D5D;
}

div#page
{
   width: 100%;
   max-width: 800px;
   margin-left: auto;
   margin-right: auto;
   position: relative;
   min-height: 100%;
}

div#footer
{
   width: 100%;
   text-align: center;
   font-size: 0.8em;
   position: relative;
   margin-top: -1.5em;
}

form#MyForm
{
   width: 100%;
   padding: 0em 0.75em 0.75em 0.75em;
   border: 1px solid #000;
   border-radius: 0.5em;
}

input#title
{
   width: 100%;
}

textarea#comments
{
   width: 100%;
   height: 400px;
   resize: none;
}
      </style>
   </head>
   <body>
      <div id="page">
         <h1>Anonymous Message Box</h1>
         <p>This webpage is an example of sending things php mails.  Please update the mail address from the dummy one to your actual destination.</p>
         <form action="processor.php" method="post" id="MyForm">
            <p>
               <label for="title">Title (*)</label>
               <input type="text" name="title" placeholder="Title" id="title" required>
            </p>
            <p>
               <label for="comments">Comments (*)</label>
               <textarea name="comments" id="comments" placeholder="Questions & Comments" required></textarea>
            </p>
            <p>(*) Required field</p>
            <input type="submit" value="Submit">
         </form>
      </div>
      <div id="footer">Developed and maintained by <a href="https://yichen.me/" target="_blank">Yi (Luna) Chen</a>.  Contact <a href="mailto:luna.chen@cern.ch">luna.chen@cern.ch</a> for technical issues regarding this page.</div>
   </body>
</html>
