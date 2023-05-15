function pokazDrugieNawi() {
    var width = document.body.clientWidth;


        if (document.documentElement.scrollTop > 800) {
            document.getElementById("nawi1").style.display = "none";
            document.getElementById("nawi2").style.display = "block";
        }
        else {
            document.getElementById("nawi1").style.display = "block";
            document.getElementById("nawi2").style.display = "none";
        }
    }

}
