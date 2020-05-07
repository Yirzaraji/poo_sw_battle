const card = document.getElementsByClassName("card");

for (const cards of card) {
  console.log(cards);
  cards.addEventListener("click", function () {
    cards.classList.replace("notCliked", "clicked");

    const clicked = document.getElementsByClassName("clicked");

    //un peu bugué
    for (const clickeds of clicked) {
      console.log("test", clickeds);
      clickeds.addEventListener("click", function () {
        clickeds.classList.replace("clicked", "notCliked");
      });
    }

    if (clicked.length === 2) {
      const notClicked = document.getElementsByClassName("notCliked");
      //console.log('test',notClicked);

      for (let i = 0; i <= notClicked.length; i++) {
        const container = document.getElementById("superContain");
        container.removeChild(notClicked[i]);
      }

      let Ashoka = document.getElementById("card01");
      let Revan = document.getElementById("card02");
      let Yoda = document.getElementById("card03");

      if (Ashoka && Revan) {
        console.log("Ashsoka Vs Revan");

        const atakAshsoka = document.getElementById("ashsoka");
        atakAshsoka.addEventListener("click", function () {
          $.ajax({
            method: "GET",
            url: "class/AshsokaVsRevan.php",
            dataType: "html",

            success: function () {
              console.log("Ajax success");
            },
            error: function () {
              alert("There was an error. Try again please!");
            },
          })
            //.done est lié a jquery ref la doc
            .done(function (response) {
              console.log(response);

              const combatLog = document.getElementById("combatLog");
              combatLog.style.display = "block";

              const fight = document.getElementById("fight");
              fight.innerHTML = response;
            });
        });

        const atakRevan = document.getElementById("revan");
        atakRevan.addEventListener("click", function () {
          $.ajax({
            method: "GET",
            url: "class/RevanVsAshsoka.php",
            dataType: "html",

            success: function () {
              console.log("Ajax success");
            },
            error: function () {
              alert("There was an error. Try again please!");
            },
          })
            //.done est lié a jquery ref la doc
            .done(function (response) {
              console.log(response);

              const combatLog = document.getElementById("combatLog");
              combatLog.style.display = "block";

              const fight = document.getElementById("fight");
              fight.innerHTML = response;
            });
        });
      } else if (Yoda && Ashoka) {
        console.log("Ashsoka Vs Yoda");

        const YodavsAshsoka = document.getElementById("yoda");
        YodavsAshsoka.addEventListener("click", function () {
          $.ajax({
            method: "GET",
            url: "class/AshsokaVsYoda.php",
            dataType: "html",

            success: function () {
              console.log("Ajax success");
            },
            error: function () {
              alert("There was an error. Try again please!");
            },
          })
            //.done est lié a jquery ref la doc
            .done(function (response) {
              console.log(response);

              const combatLog = document.getElementById("combatLog");
              combatLog.style.display = "block";

              const fight = document.getElementById("fight");
              fight.innerHTML = response;
              e;
            });
        });

        const AshsokaVsYoda = document.getElementById("ashsoka");
        AshsokaVsYoda.addEventListener("click", function () {
          $.ajax({
            method: "GET",
            url: "class/YodaVsAshsoka.php",
            dataType: "html",

            success: function () {
              console.log("Ajax success");
            },
            error: function () {
              alert("There was an error. Try again please!");
            },
          })
            //.done est lié a jquery ref la doc
            .done(function (response) {
              console.log(response);

              const combatLog = document.getElementById("combatLog");
              combatLog.style.display = "block";

              const fight = document.getElementById("fight");
              fight.innerHTML = response;
            });
        });
      } else if (Revan && Yoda) {
        console.log("Revan Vs Yoda");

        const YodavsRevan = document.getElementById("yoda");
        YodavsRevan.addEventListener("click", function () {
          $.ajax({
            method: "GET",
            url: "class/YodaVsRevan.php",
            dataType: "html",

            success: function () {
              console.log("Ajax success");
            },
            error: function () {
              alert("There was an error. Try again please!");
            },
          })
            //.done est lié a jquery ref la doc
            .done(function (response) {
              console.log(response);

              const combatLog = document.getElementById("combatLog");
              combatLog.style.display = "block";

              const fight = document.getElementById("fight");
              fight.innerHTML = response;
            });
        });

        const RevanvsYoda = document.getElementById("revan");
        RevanvsYoda.addEventListener("click", function () {
          $.ajax({
            method: "GET",
            url: "class/RevanVsYoda.php",
            dataType: "html",

            success: function () {
              console.log("Ajax success");
            },
            error: function () {
              alert("There was an error. Try again please!");
            },
          })
            //.done est lié a jquery ref la doc
            .done(function (response) {
              console.log(response);

              const combatLog = document.getElementById("combatLog");
              combatLog.style.display = "block";

              const fight = document.getElementById("fight");
              fight.innerHTML = response;
            });
        });
      }
    }
  });
}
