function changeText(title1, title2, title3) {

    var title1;
    var title2;
    var title3;

    title1 = document.getElementById("title1");
    title2 = document.getElementById("title2");
    title3 = document.getElementById("title3");

    if(getElementById(title1)) {

        document.getElementById("titleOne").innerHTML = "hello there";

    } else if(getElementById(title2)) {

        document.getElementById("titleTwo").innerHTML = "something else";

    } else if(getElementById(title3)) {

        document.getElementById("titleThree").innerHTML = "let's do this";

    }

    

}