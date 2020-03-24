<template>
    <div>
        <p> Computer: {{compWeapon}} </p>
        <img :src="weaponImage" alt="Image">

    </div>

</template>

<script>
export default {
    name: 'ComputerPlayer',
    data: function() {
        return {
            compWeapon: "",
            weaponImage: "images/rock.PNG",
        }
    },
    mounted: function() {
        this.$root.$on('computerWeapon', this.getCompWeapon)
    },
    methods: {
        getCompWeapon: function() {
            var self = this;
            axios.get('/weapon')
            .then(response => {
                this.compWeapon = response.data.weapon;
                this.weaponImage = "images/"+response.data.weapon+".PNG";
                var ComputerWeapon = response.data.weapon;
                this.$root.$emit('computerChosenWeapon', ComputerWeapon);
            })
            .catch(error => {
                this.compWeapon = "There's an error on the weapon chosen";
            })
        }
    }
}
</script>


<style scoped>

    p {
        text-align: center;
        margin-bottom: 30px;
        color: #E01A4F;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 2em;


    }

    img {
        width: 150px;
        height: 150px;
        margin: 0 auto;

    }

</style>
