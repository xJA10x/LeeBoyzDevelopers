function changeText(portfolio, team, contact) {

    var portfolio;
    var team;
    var contact;

    portfolio = document.getElementById("portfolio");
    team = document.getElementById("team");
    contact = document.getElementById("contact");

        if(portfolio) {

            document.getElementById("titleOne").innerHTML = "Something else";

        } else if(team) {

            document.getElementById("titleTwo").innerHTML = "Le'ts do this";

        } else if(contact) {

            document.getElementById("titleThree").innerHTML = "Let's see if it works";

        }
    
}
