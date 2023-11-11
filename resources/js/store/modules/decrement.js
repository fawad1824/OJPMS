// modules/decrement.js

const state = {
    count: 0,
  };

  const mutations = {
    decrement(state) {
      state.count--;
    },
  };

  export default {
    namespaced: true,
    state,
    mutations,
  };
