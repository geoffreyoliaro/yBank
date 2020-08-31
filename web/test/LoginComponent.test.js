import { mount } from '@vue/test-utils';
import LoginComponent from '@/components/auth/LoginComponent.vue';

describe('LoginComponent',()=>{
    test('is a Vue instance ', () => {
        const wrapper = mount(LoginComponent)
        expect(wrapper.isVueInstance()).toBeTruthy()        
    })    
})