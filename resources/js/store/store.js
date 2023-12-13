// store.js

import { createStore } from "vuex";
import isLoginModule from "./modules/Islogin.js";
import Company from "./modules/companyCategory.js";

export default createStore({
  modules: {
    isLogin: isLoginModule,
    Company:Company,
  },
});
