// modules/decrement.js

const state = {
  token: localStorage.getItem('Token'),
  user: localStorage.getItem('Users'),
};

const mutations = {
  setToken(state, token) {
    state.token = token;
  },
  setUser(state, user) {
    state.user = user;
  },
};

export default {
  namespaced: true,
  state,
  mutations,
};
