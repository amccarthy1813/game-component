# game-component
As part of the capstone for my degree, I collaborated on a project with two other team members to create a fully browser based game. With some experience writing Javascript and using the three.js library, I was able to contribute the game needed for the project. While my teammates were able to focus on the rest of the backend, I could focus on writing the script and CSS in MIBGa_Game.html.

# MIBGa_Game.html
I faced a number of challenges creating the game, especially when sending the score data asynchronously to the server. What I wanted to have happen is:
1. Send data from the client side to the server side
2. Do so asynchronously, without a page reload or redirect
3. Do so using only vanilla Javascript 

This was achieved in the following way:
1. Creating a web form, and hiding it with CSS.
2. Creating an event listener for the event fired when sending a web form
  -sending a web form using the send() function is Javascript does not fire the onSend event, so default behavior cannot be prevented 
3. Creating a MouseClick event to 'click' the submit button of the web form
  -firing the MouseClick event on the web form's submit button WILL cause the onSend event to fire

The three objectives I had set for myself were fulfilled, without adding any extra dependencies.

