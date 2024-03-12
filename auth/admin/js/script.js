document.getElementById("open-edit-box").addEventListener('click',()=>{
   const accountTab = document.querySelector(".account_edit");
    accountTab.style.display='block';
});
document.querySelector(".close_account_edit").addEventListener("click",()=>{
    console.log("click")
    const accountTab = document.querySelector(".account_edit");
    accountTab.style.display='none';
});