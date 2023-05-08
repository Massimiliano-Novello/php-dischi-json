const {createApp} = Vue;

createApp({
    data() {
        return{
            todos: []
        }
    },
    mounted() {
        axios.get("http://localhost/Boolean/php-dischi-json/server.php").then((resp) => {
            console.log(resp);
            this.todos = resp.data.results
        })
    }

}).mount('#app');