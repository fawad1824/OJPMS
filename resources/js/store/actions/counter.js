export const state = {
    count: 0,
  };

  export const mutations = {
    increment(state) {
      state.count++;
    },
    decrement(state) {
      state.count--;
    },
  };

  export const actions = {
    increment(context) {
      context.commit('increment');
    },
    decrement(context) {
      context.commit('decrement');
    },
  };
