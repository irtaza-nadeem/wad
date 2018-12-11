var profile = [
    {
        name: "Quaid e Azam",
        born: "December 25, 1876",
        position: "Founder of Pakistan",
        img: "images/quaid.jpg"
    },
    {
        name: "Imran Khan",
        born: "October 5, 1952",
        position: "Prime Minister of Pakistan",
        img: "images/imran.jpg"
    },
    {
        name: "Irtaza Nadeem",
        born: "December 19, 1993",
        position: "Student of UCP",
        img: "images/avatar.jpg"
    }
];

var current = 0;
var comment;
window.onload = show;

function show()
{
    document.getElementById("dp").src = profile[current].img;
    document.getElementById("name").innerHTML =profile[current].name;
    document.getElementById("dob").innerHTML =  "<b>Born: </b>" +  profile[current].born;
    document.getElementById("position").innerHTML = '<i><b>' + profile[current].position + '</b></i>';
}

function next()
{
    current = (current+1)%3;
    show();
}

function prev()
{
    current = (current-1)%3;
    show();
}

function share() {
    comment = document.getElementById("comment-area").value;
    if(comment.trim() == "")
    {
        document.getElementById("comment-msg").innerText = "Enter a Valid comment";
    }
    else
    {
        document.getElementById("comment-msg").innerText = "";
        var l = document.createElement("div");
        l.classList.add("comment");
        l.classList.add("col-lg-4");
        l.classList.add("col-md-6");
        var textnode = document.createTextNode(comment);
        l.appendChild(textnode);
        document.getElementById("comment-list").appendChild(l);
    }
}

