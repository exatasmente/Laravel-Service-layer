import axios from 'axios'
import * as types from '../mutation-types'

// state
export const state = {
    properties: [],
    search : "",
}

// getters
export const getters = {
    properties: state => state.properties,
    search: state => state.search,
    property: (state,id) => state.properties.search((el)=> el.id == id )
}
// mutations
export const mutations = {

    [types.FETCH_PROPERTIES_SUCCESS] (state, { properties }) {
        state.user = properties
    },

    [types.FETCH_PROPERTIES_FAILURE] (state) {
        state.properties = null
    },
    [types.UPDATE_PROPERTIES] (state, { properties }) {
        state.properties = properties
    }
}

// actions
export const actions = {
    async fetchProperties ({ commit }) {
        try {
            const { data } = await axios.get('/api/property')

            commit(types.FETCH_PROPERTIES_SUCCESS, { properties: data })
        } catch (e) {
            commit(types.FETCH_PROPERTIES_FAILURE)
        }
    },
    updateProperties ({ commit }, payload) {
        commit(types.UPDATE_PROPERTIES, payload)
    },


}
