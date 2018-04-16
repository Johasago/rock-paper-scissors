var rock = document.getElementById("rock");
var paper = document.getElementById("paper");
var scissors = document.getElementById("scissors");
var result = document.getElementById("result");


rock.onclick = function() {
                            paper.style.display = "none";
                            scissors.style.display = "none";
                            result.style.textAlign = "left";
                            reset.hidden = false;
                        };
                        
paper.onclick = function() {
                            rock.style.display = "none";
                            scissors.style.display = "none";
                            result.style.textAlign = "center"; 
                            reset.hidden = false;
                            };
                            
scissors.onclick = function() {
                                rock.style.display = "none";
                                paper.style.display = "none";
                                result.style.textAlign = "right";
                                reset.hidden = false;
                               };


var again = document.getElementById("reset");
again.onclick = function() {
                                document.location.reload(true);
                                };

                        
               