"use strict";

function Action_table(ID, values, tn_ce, aco_ce, tn_hhp, aco_hhp, ft_ce, ft_hhp,
                      time_ce, rem_q_ce, acp_ce, rat_ce, tar_ce, pick_ce, rat2_ce,
                      time_hhp, rem_q_hhp, acp_hhp, rat_hhp, tar_hhp, pick_hhp, rat2_hhp) {
    /*Выводит данные 1 поля с названиями*/
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

    function inp_val2() {
        let val = document.createElement('tr');
        val.classList.add('val2');
        val.id = 'val2' + ID;

        document.querySelector("#values_2").appendChild(val);
        let th;
        th = document.createElement("th");
        th.textContent = values;
        document.getElementById(val.id).appendChild(th);
    }

    inp_val2();

    function inp_tn_hhp() {
        let tn = document.createElement('tr');
        tn.classList.add('hhp_ce');
        tn.id = 'hhp' + ID;

        document.querySelector("#tn-1-2").appendChild(tn);
        let span;
        span = document.createElement("td");
        span.textContent = tn_hhp;
        document.getElementById(tn.id).appendChild(span);
    }

    inp_tn_hhp();

    function inp_aco_hhp() {
        let aco = document.createElement('tr');
        aco.classList.add('aco_hhp');
        aco.id = 'aco_hhp' + ID;

        document.querySelector("#aco_hhp").appendChild(aco);
        let span;
        span = document.createElement("td");
        span.textContent = aco_hhp;
        document.getElementById(aco.id).appendChild(span);
    }

    inp_aco_hhp();

    function inp_ft_2() {
        let ft2 = document.createElement("div");
        ft2.classList.add("ft-2");
        ft2.id = "ft-2_" + ID;

        document.querySelector("#ft-2").appendChild(ft2);
        let span;
        span = document.createElement("span");
        span.textContent = ft_hhp;
        document.getElementById(ft2.id).appendChild(span);
    }

    inp_ft_2();

    function inp_time1() {
        let time_1 = document.createElement("tr");
        time_1.classList.add("time_1");
        time_1.id = "time1_" + ID;

        document.querySelector("#time_1").appendChild(time_1);
        let td;
        td = document.createElement("td");
        td.textContent = time_ce;
        document.getElementById(time_1.id).appendChild(td);
    }

    function inp_rem_q_ce() {
        let rem_1 = document.createElement("tr");
        rem_1.classList.add("rem_1");
        rem_1.id = "rem1_" + ID;

        document.querySelector("#rem_1").appendChild(rem_1);
        let td;
        td = document.createElement("td");
        td.textContent = rem_q_ce;
        document.getElementById(rem_1.id).appendChild(td);
    }

    function inp_acp_ce() {
        let acp_1 = document.createElement("tr");
        acp_1.classList.add("acp_1");
        acp_1.id = "acp1_" + ID;

        document.querySelector("#acp_1").appendChild(acp_1);
        let td;
        td = document.createElement("td");
        td.textContent = acp_ce;
        document.getElementById(acp_1.id).appendChild(td);
    }

    function inp_rat_ce() {
        let rat_1 = document.createElement("tr");
        rat_1.classList.add("acp_1");
        rat_1.id = "acp1_" + ID;

        document.querySelector("#rat_1_ce").appendChild(rat_1);
        let td;
        td = document.createElement("td");
        td.textContent = rat_ce;
        document.getElementById(rat_1.id).appendChild(td);
    }

    function inp_tar_1() {
        let trg1 = document.createElement("tr");
        trg1.classList.add("num");
        trg1.id = "trg2_" + ID;

        document.querySelector("#trg1").appendChild(trg1);
        let td;
        td = document.createElement("td");
        td.textContent = tar_ce;
        document.getElementById(trg1.id).appendChild(td);
    }

    function inp_pck_1() {
        let pck1 = document.createElement("tr");
        pck1.classList.add("pck");
        pck1.id = "pck1_" + ID;

        document.querySelector("#pck1").appendChild(pck1);
        let td;
        td = document.createElement("td");
        td.textContent = pick_ce;
        document.getElementById(pck1.id).appendChild(td);
    }

    function inp_rat2_ce() {
        let rat_2 = document.createElement("tr");
        rat_2.classList.add("rat_2");
        rat_2.id = "rat2_" + ID;

        document.querySelector("#rat_2_ce").appendChild(rat_2);
        let td;
        td = document.createElement("td");
        td.textContent = rat2_ce;
        document.getElementById(rat_2.id).appendChild(td);
    }

    function inp_time2() {
        let time_2 = document.createElement("tr");
        time_2.classList.add("time_2");
        time_2.id = "time2_" + ID;

        document.querySelector("#time_2").appendChild(time_2);
        let td;
        td = document.createElement("td");
        td.textContent = time_hhp;
        document.getElementById(time_2.id).appendChild(td);
    }

    function inp_rem_q_ce2() {
        let rem_2 = document.createElement("tr");
        rem_2.classList.add("rem_2");
        rem_2.id = "rem2_" + ID;

        document.querySelector("#rem_2").appendChild(rem_2);
        let td;
        td = document.createElement("td");
        td.textContent = rem_q_hhp;
        document.getElementById(rem_2.id).appendChild(td);
    }

    function inp_acp_hhp() {
        let acp_2 = document.createElement("tr");
        acp_2.classList.add("acp_2");
        acp_2.id = "acp2_" + ID;

        document.querySelector("#acp_2").appendChild(acp_2);
        let td;
        td = document.createElement("td");
        td.textContent = acp_hhp;
        document.getElementById(acp_2.id).appendChild(td);
    }

    function inp_rat_hhp() {
        let rat_2 = document.createElement("tr");
        rat_2.classList.add("rat_1_hhp");
        rat_2.id = "rat_1_hhp" + ID;

        document.querySelector("#rat_1_hhp").appendChild(rat_2);
        let td;
        td = document.createElement("td");
        td.textContent = rat_hhp;
        document.getElementById(rat_2.id).appendChild(td);
    }

    function inp_tar_2() {
        let trg2 = document.createElement("tr");
        trg2.classList.add("num");
        trg2.id = "trg_hhp" + ID;

        document.querySelector("#trg2").appendChild(trg2);
        let td;
        td = document.createElement("td");
        td.textContent = tar_hhp;
        document.getElementById(trg2.id).appendChild(td);
    }


    function inp_pck_2() {
        let pck2 = document.createElement("tr");
        pck2.classList.add("pck");
        pck2.id = "pck2_" + ID;

        document.querySelector("#pck2").appendChild(pck2);
        let td;
        td = document.createElement("td");
        td.textContent = pick_hhp;
        document.getElementById(pck2.id).appendChild(td);
    }

    function inp_rat2_hhp() {
        let rat_2 = document.createElement("tr");
        rat_2.classList.add("rat_2_hhp");
        rat_2.id = "rat_2_hhp" + ID;

        document.querySelector("#rat_2_hhp").appendChild(rat_2);
        let td;
        td = document.createElement("td");
        td.textContent = rat2_hhp;
        document.getElementById(rat_2.id).appendChild(td);
    }


    inp_time1();
    inp_rem_q_ce();
    inp_rat_ce();
    inp_acp_ce();
    inp_tar_1();
    inp_pck_1();
    inp_rat2_ce();
    inp_time2();
    inp_rem_q_ce2();
    inp_acp_hhp();
    inp_rat_hhp();
    inp_tar_2();
    inp_pck_2();
    inp_rat2_hhp();
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
