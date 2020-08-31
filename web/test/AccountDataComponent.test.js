import {shallowMount } from "@vue/test-utils";
import AccountDataComponent from "@/components/accounts/AccountDataComponent.vue";

describe("AccountDataComponent", () => {
  test("is a Vue instance ", () => {
    const wrapper = shallowMount(AccountDataComponent, {
      propsData: {
        AccountDataComponent: {
          show: false,
          payment: {},
          mocks: {
            $route: {
              params: {  }
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

const $axios = {
    get: () => {
      return Promise.resolve({ data: [{ char_id: 1, name: "123" }] });
    }
  };
  
  describe("AccountDataComponent", () => {
    let wrapper;
    it("renders", () => {
      wrapper = shallowMount(AccountDataComponent, { mocks: { $axios } });
      expect(wrapper.exists()).toBe(true);
    });
  })  
