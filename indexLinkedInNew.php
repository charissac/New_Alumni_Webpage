<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>LinkedIn Authentication Login in Asp.net Website</title>
        <script type="text/javascript" src="http://platform.linkedin.com/in.js">
            api_key:  814qiizpu00ajl
            onLoad: onLinkedInLoad
            //authorize: true
        </script>


        <script type="text/javascript">

            // Setup an event listener to make an API call once auth is complete
            function onLinkedInLoad() {
                IN.Event.on(IN, "auth", onLinkedInAuth);
            }

            function onLinkedInAuth() {
                // IN.API.Profile('me').result(displayProfiles);
                IN.API.Profile('me')
                        .result(displayProfiles);
            }

            function displayProfiles(profiles) {
                var member = profiles.values[0];
                
                //available fields https://developer.linkedin.com/docs/fields/basic-profile
                var firstName = member.firstName;
                var lastName = member.lastName;
				var pictureURL = member.pictureUrl;
                document.write(JSON.stringify(profiles));
				
				 window.location.href = "registerLinkedIn.php?username=" + firstName + "&fullname=" + firstName+lastName + "&pictureURL=" + pictureURL; 
				//window.location.replace("http://localhost/New%20Alumni%20Webpage/registerLinkedIn.php");


            }


        </script>
    </head>
     <body>
        <form id="form1" runat="server">
            <script type="in/Login">
            </script> 
			
			
        </form>
		
		
		
    </body>
	
</html>