import {shallowMount } from "@vue/test-utils";
import AccountDataComponent from "@/components/accounts/AccountDataComponent.vue";

describe("AccountDataComponent", () => {
  test("is a Vue instance ", () => {
    const id = 1;
    const wrapper = shallowMount(AccountDataComponent, {
      
      propsData: {
        AccountDataComponent: {
          show: false,
          payment: {},
          mocks: {
            $route: {
              params: {id}
            }
          },
          account: [],
          transactions: [],
          transactionLimit: false,
          loading: true
        }
      }
    });
    expect(wrapper.isVueInstance()).toBeTruthy();
  });
});

describe("AccountDataComponent",() =>{
  test("New Payment button shows and hides the payment button", () =>{
    const wrapper = shallowMount(AccountDataComponent)
    expect(wrapper.vm.show).toBe(false)
  })
})