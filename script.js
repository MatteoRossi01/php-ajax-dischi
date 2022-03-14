const App = new Vue({

    el: '#app',

    created(){
        axios.get('http://localhost/php-ajax-dischi/server.php')
           
        .then((response) => {
            this.albumList = response.data;
            console.log(response);
            console.log(this.albumList)
        })
        .catch(function (error) {
            console.log(error);
        })
        .then(function () {});
    },
    
    data : {
       albumList : [], 
    },
})