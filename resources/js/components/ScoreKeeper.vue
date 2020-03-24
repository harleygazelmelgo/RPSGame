<template>
    <div id="scorekeeper">
        <div>

        </div>

        <div id="score">
            <div>
                <h3>Player Score: {{ userScore }}</h3>
            </div>
             <div>
                <h3>Computer Score: {{ computerScore }}</h3>
            </div>

        </div>

    </div>

</template>

<script>
export default {
    name: 'ScoreKeeper',
    data: function() {
        return {
            userScore: 0,
            computerScore: 0,
            userWeapon: '',
            compWeapon: '',
            decision: "Who will win?",

        }
    },
    mounted: function() {
        this.$root.$on('updateScore', this.notifyPlayer)
        this.$root.$on('computerChosenWeapon', this.notifyComputer)

    },
    methods: {
        notifyPlayer: function(userWeaponChose){
            this.userWeapon = userWeaponChose;
        },
        notifyComputer: function(compWeaponChose){
            this.compWeapon = compWeaponChose;
            if(compWeaponChose == this.userWeapon) {
                this.decision = "It's a draw";
            } else if(this.userWeapon=='Rock'){
                if(compWeaponChose=='Paper'){
                    this.computerScore++;
                    this.$root.$emit('reset', this.computerScore);
                }
            } else if (compWeaponChose == 'Scissors') {
                this.userScore++;
            } else if (this.userWeapon == 'Paper') {
                if(compWeaponChose == 'Rock') {
                    this.userScore++;
                }
            } else if (compWeaponChose == 'Scissors') {
                this.computerScore++;
                this.$root.$emit('reset', this.computerScore);
            } else if (this.userWeapon == 'Scissors') {
                if(compWeaponChose == 'Paper') {
                    this.userScore++;
                }
            } else if (compWeaponChose == 'Rock') {
                this.computerScore++;
                this.$root.$emit('reset', this.computerScore);
            }
        }

    }

}
</script>


<style scoped>

    #scorekeeper {
        display: grid;
        grid-template-rows: 1fr 1fr;
        justify-content: center;
        justify-items: center;
    }

    #score {
        display: grid;
        grid-template-columns: 1fr 1fr;
        justify-content: center;
        justify-items: center;
        column-gap: 100px;
        color: #FFF689;

    }



</style>
