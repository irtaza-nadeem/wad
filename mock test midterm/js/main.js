var accountholders = {
        title: "Irtaza Nadeem",
        balance: 100000,
        accountcurrentcy: "PKRS",
        iban: "PKN123456789",

        depositamount: function(e, v)
        {
            if(e.keyCode == 13)
            {
                if(isNaN(v))
                {
                    document.getElementById("deposit-msg").innerText = "Enter Valid Amount";
                }
                else
                {
                    document.getElementById("deposit-msg").innerText = "";
                    accountholders.balance += parseInt(v);
                    document.getElementById('balance').innerHTML = accountholders.balance;
                    var f = "Deposit";
                    showlist(f,v);
                }
            }
        },

        withdrawamount: function(e, v)
        {
            if(e.keyCode == 13)
            {
                if(isNaN(v))
                {
                    document.getElementById("withdraw-msg").innerText = "Enter Valid Amount";
                }
                else if(v > accountholders.balance)
                {
                    document.getElementById("withdraw-msg").innerText = "Don't have sufficient in account";
                }
                else
                {
                    document.getElementById("withdraw-msg").innerText = "";
                    accountholders.balance -= parseInt(v);
                    document.getElementById('balance').innerHTML = accountholders.balance;
                    var f = "Debit";
                    showlist(f,v);
                }
            }
        },


    };


document.getElementById('title').innerHTML = accountholders.title;
document.getElementById('balance').innerHTML = accountholders.balance;
document.getElementById('currency').innerHTML = accountholders.accountcurrentcy;
document.getElementById('IBAN').innerHTML = accountholders.iban;




function showlist(e, v)
{
    document.getElementById("transaction-table").innerHTML += '<tr><td>' + new Date() + '</td><td>' + e + '</td><td>' + v + '</td></tr>';
}