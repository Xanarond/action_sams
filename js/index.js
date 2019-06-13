"use strict";

function Action_table(ID, tn_ce, aco_ce, tn_hhp, aco_hhp, ft_ce) {

    let div = document.createElement("div");
    div.classList.add("num");
    div.id = "num_" + ID;

    document.querySelector("#tn-1").appendChild(div);
    let span;
    span = document.createElement("span");
    span.textContent = aco_ce;
    document.getElementById(div.id).appendChild(span);

}

/*
function inp_ce() {
    $('#ce_modal').modal('show');
}

function inp_hhp() {
    $('#hhp_modal').modal('show');
}
*/

/*
function input_ce() {

    $('#save').click(function () {
        function qty_inp() {
            let inp = document.getElementById('tn-inp-1');
            let span1 = document.createElement("span");
                inp.oninput = function () {
                    span1.setAttribute("id", "result_q1");
                    span1.textContent = inp.value;
                    document.getElementById('tn-1').appendChild(span1);
                };
            }
        qty_inp();
    })
}
*/
