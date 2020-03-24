<template>

    <div class="button-options">
        <br>
        <div><h1><strong> Choose a weapon </strong></h1></div>
        <br>
        <button class="btn btn-success" @click="chosenWeapon('Rock')"> Rock </button>
        <button class="btn btn-success" @click="chosenWeapon('Paper')"> Paper </button>
        <button class="btn btn-success" @click="chosenWeapon('Scissors')"> Scissors </button>
        <br>


    </div>

</template>

<script>
    export default {
        name: 'ButtonOptions',
        methods: {
            chosenWeapon: function (data) {
                this.$root.$emit('PlayerChosenWeapon', data);
                this.$root.$emit('updateScore', data);
            },

        },
        mounted: function(){
            this.$root.$on('reset')
        }

    }
</script>

<style scoped>

    button {
        margin-top: 50px;
        margin-left: 225px;
        margin-bottom: 20px;

    }

    h1 {
        text-align: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 3.5em;
        color: #FFF689;
    }


</style>
