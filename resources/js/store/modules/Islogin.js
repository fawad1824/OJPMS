// modules/decrement.js

const state = {
  token: "",
  userName: "",
};

const mutations = {
  setToken(state, token) {
    state.token = token;
  },
  setUserName(state, userName) {
    state.userName = userName;
  },
};

export default {
  namespaced: true,
  state,
  mutations,
};
