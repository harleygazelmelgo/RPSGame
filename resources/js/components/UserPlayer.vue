<template>
    <div>
        <p> Player: {{userWeapon}} </p>
        <img :src="userWeaponImage" alt="Image">


    </div>

</template>

<script>
export default {
    name: 'UserPlayer',
    data: function() {
        return {
            userWeapon: "",
            userWeaponImage: "images/rock.PNG",


        }
    },
    mounted: function() {
        this.$root.$on('PlayerChosenWeapon', this.getUserWeapon)
    },
    methods: {
        getUserWeapon: function(photo) {
            this.userWeapon = photo;
            this.userWeaponImage = "images/"+photo+".PNG";
            this.$root.$emit('computerWeapon', this.userWeapon);

        },
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
        margin: 0 70px;

    }


</style>
