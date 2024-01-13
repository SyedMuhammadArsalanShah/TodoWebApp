

updates = document.getElementsByClassName("update");




Array.from(updates).forEach(element => {


    element.addEventListener("click", (e) => {

        myelement =e.target.parentNode.parentNode;


         username= myelement.getElementsByTagName("td")[1].innerText;
         title= myelement.getElementsByTagName("td")[2].innerText;
         desc= myelement.getElementsByTagName("td")[3].innerText;


         console.log(title, username, desc);

         user.value=username;
         titleedit.value=title;
         descedit.value=desc;
         usereditid.value=e.target.id;

         console.log(usereditid);


        console.log("update btn is working......", myelement);





        $('#updateModal').modal('toggle');

    });
});