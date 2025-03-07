

   
      



    



    
 function createDeck()
 {
     deck = new Array();
     for (var i = 0 ; i < values.length; i++)
     {
         for(var x = 0 ; x < suits.length; x++)
         {
             var weight = parseInt(values[i]);
             if (values[i] == "J" || values[i] == "Q" || values[i] == "K")
                 weight = 10;
             if (values[i] == "A")
                 weight = 11;
             var card = { Value: values[i], Suit: suits[x], Weight: weight };
             deck.push(card);
         }
     } 
    
     function shuffle()
     {
        
         for (var i = 0; i < 1000; i++)
         {
             var location1 = Math.floor((Math.random() * deck.length));
             var location2 = Math.floor((Math.random() * deck.length));
             var tmp = deck[location1];
 
             deck[location1] = deck[location2];
             deck[location2] = tmp;
         }

     }
     var players = new Array();
       function createPlayers(num)
       {
           players = new Array();
           for(var i = 1; i <= num; i++)
           {
               var hand = new Array();
               var player = { Name: 'Player ' + i, ID: i, Points: 0, Hand: hand };
               players.push(player);
           }
       }
       function createPlayersUI()
       {
           document.getElementById('players').innerHTML = '';
           for(var i = 0; i < players.length; i++)
           {
               var div_player = document.createElement('div');
               var div_playerid = document.createElement('div');
               var div_hand = document.createElement('div');
               var div_points = document.createElement('div');
   
               div_points.className = 'points';
               div_points.id = 'points_' + i;
               div_player.id = 'player_' + i;
               div_player.className = 'player';
               div_hand.id = 'hand_' + i;
   
               div_playerid.innerHTML = players[i].ID;
               div_player.appendChild(div_playerid);
               div_player.appendChild(div_hand);
               div_player.appendChild(div_points);
               document.getElementById('players').appendChild(div_player);
           }
       }
       function startblackjack()
       {
           document.getElementById('btnStart').value = 'Restart';
           document.getElementById("status").style.display="none";
           
           currentPlayer = 0;
           createDeck();
           shuffle();
           createPlayers(2);
           createPlayersUI();
           dealHands();
           document.getElementById('player_' + currentPlayer).classList.add('active');
       }

       function dealHands()
       {
          
           for(var i = 0; i < 2; i++)
           {
               for (var x = 0; x < players.length; x++)
               {
                   var card = deck.pop();
                   players[x].Hand.push(card);
                   renderCard(card, x);
                   updatePoints();
               }
           }
   
           updateDeck();
       }
       function renderCard(card, player)
       {
           var hand = document.getElementById('hand_' + player);
           hand.appendChild(getCardUI(card));
       }
}