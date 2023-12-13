// todos.js
import axios from 'axios';

const companyModule = {
    state: {
        company: [],
    },
    mutations: {
        setCompany(state, company) {
            state.company = company;
        },
    },
    actions: {
        async fetchCompanies() {
            try {
                const response = await axios.get('/api/get-category', {
                    headers: {
                        Authorization: `Bearer ${localStorage.getItem('Token')}`,
                    },
                });
                console.log(response);
                commit('setCompany', response);
            } catch (error) {
                console.error('Error fetching Companies:', error);
            }
        },
    },
    getters: {
        // Getters specific to todos...
    },
};

export default {
    namespaced: true,
    companyModule,
};
