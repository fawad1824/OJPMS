// store.js

import { createStore } from "vuex";
import incrementModule from "./modules/increment.js";
import decrementModule from "./modules/decrement.js";
import isLoginModule from "./modules/Islogin.js";

export default createStore({
  modules: {
    increment: incrementModule,
    decrement: decrementModule,
    isLogin: isLoginModule,
  },
});
