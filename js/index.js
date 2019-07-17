"use strict";

function Action_table(ID, values, tn_ce, aco_ce, tn_hhp, aco_hhp, ft_ce, ft_hhp,
                      time_ce, rem_q_ce, acp_ce, rat_ce, tar_ce, pick_ce, rat2_ce,
                      time_hhp, rem_q_hhp, acp_hhp, rat_hhp, tar_hhp, pick_hhp, rat2_hhp) {
    /*Выводит данные 1 поля с названиями*/
    let ce = document.createElement('tr');
    function inp_val() {
        let val = document.createElement('tr');
        val.classList.add('val');
        val.id = 'val' + ID;

        document.querySelector("#values").appendChild(val);
        let th;
        th = document.createElement("th");
        th.textContent = values;
        document.getElementById(val.id).appendChild(th);
    }

    inp_val();

    /*Выводит данные из 1-го Till Now (2 поле)*/
    function inp_tn_ce() {
        let tn = document.createElement('tr');
        tn.classList.add('tn_ce');
        tn.id = 'tn' + ID;

        document.querySelector("#tn_ce").appendChild(tn);
        let span;
        span = document.createElement("td");
        span.textContent = tn_ce;
        document.getElementById(tn.id).appendChild(span);
    }

    inp_tn_ce();

    /*Выводит*/
    function inp_aco_ce() {
        let aco = document.createElement('tr');
        aco.classList.add('aco_ce');
        aco.id = 'aco' + ID;

        document.querySelector("#aco_ce").appendChild(aco);
        let span;
        span = document.createElement("td");
        span.textContent = aco_ce;
        document.getElementById(aco.id).appendChild(span);
    }

    inp_aco_ce();

    function inp_ft_1() {
        let ft1 = document.createElement("div");
        ft1.classList.add("ft-1");
        ft1.id = "ft-1_" + ID;

        document.querySelector("#ft-1").appendChild(ft1);
        let span;
        span = document.createElement("span");
        span.textContent = ft_ce;
        document.getElementById(ft1.id).appendChild(span);
    }

    inp_ft_1();

    let row = document.createElement("tr");
    row.id = "row_" + ID;

    let row2 = document.createElement("tr");
    row2.id = "row2_" + ID;

    function inp_time1() {

        document.querySelector("#ce_t").appendChild(row);
        let th;
        th = document.createElement("th");
        th.textContent = time_ce;
        document.getElementById(row.id).appendChild(th);
    }

    function inp_rem_q_ce() {
        document.querySelector("#ce_t").appendChild(row);
        let rem = document.createElement("td");
        rem.textContent = rem_q_ce;
        document.getElementById(row.id).appendChild(rem);
    }


    function inp_acp_ce() {
        document.querySelector("#ce_t").appendChild(row);
        let td;
        td = document.createElement("td");
        td.textContent = acp_ce;
        document.getElementById(row.id).appendChild(td);
    }

    function inp_rat_ce() {
        document.querySelector("#ce_t").appendChild(row);
        let td;
        td = document.createElement("td");
        td.textContent = rat_ce;
        document.getElementById(row.id).appendChild(td);
    }

    function inp_tar_1() {
        document.querySelector("#ce_t").appendChild(row);
        let td;
        td = document.createElement("td");
        td.textContent = tar_ce;
        document.getElementById(row.id).appendChild(td);
    }

    function inp_pck_1() {
        let pck1 = document.createElement("tr");
        pck1.classList.add("pck");
        pck1.id = "pck1_" + ID;

        document.querySelector("#ce_t").appendChild(row);
        let td;
        td = document.createElement("td");
        td.textContent = pick_ce;
        document.getElementById(row.id).appendChild(td);
    }

    function inp_rat2_ce() {
        document.querySelector("#ce_t").appendChild(row);
        let td;
        td = document.createElement("td");
        td.textContent = rat2_ce;
        document.getElementById(row.id).appendChild(td);
    }

    inp_time1();
    inp_rem_q_ce();
    inp_rat_ce();
    inp_acp_ce();
    inp_tar_1();
    inp_pck_1();
    inp_rat2_ce();
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
