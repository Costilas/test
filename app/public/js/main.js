function $(id) {
    return document.getElementById(id);
}

$('start_search').addEventListener('click', function (event){
   let infoBlock = $('user_info');
   infoBlock.innerHTML='';
   let userId = $('user_id').value;
   if(userId) {
       try {
           const user = fetch('/getUserJson?user_id=' + userId)
               .then(user => user.resolve(value))
               .then(user => {
                   console.log(user)
                   let properties = Object.keys(user);
                   for(let i = 0; i < properties.length; i++){
                       let infoLine = document.createElement('div');
                       infoLine.textContent = user[properties[i]];
                       infoBlock.appendChild(infoLine);
                   }
               });
       }catch (e) {
           console.log(e);
       }
   }else {
       alert('Не введен ID пользователя');
   }
});