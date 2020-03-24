<template>
  <div class="container">
      <ScoreKeeper />
      <ButtonOptions />
      <div id="weapons">
          <UserPlayer />
          <ComputerPlayer />
      </div>
  </div>
</template>

<script>
import ButtonOptions from './ButtonOptions.vue';
import ScoreKeeper from './ScoreKeeper.vue';
import UserPlayer from './UserPlayer.vue';
import ComputerPlayer from './ComputerPlayer.vue';

export default {
  name: 'Root',
  components: {
    ButtonOptions,
    ScoreKeeper,
    UserPlayer,
    ComputerPlayer,
  }
};

</script>


<style scoped>

    .container {
        grid-template-rows: 1fr 1fr 1fr 1fr;
        justify-content: center;
        justify-items: center;
        height: 80vh;
        width: 100vw;
        margin-top: 100px;
        background-color: #2F52E0;
    }

    #weapons {
        display: grid;
        grid-template-columns: 1fr 1fr;
        justify-content: center;
        justify-items: center;
        column-gap: 100px;
        margin-bottom: 90px;
        margin-top: 50px;

    }
</style>
