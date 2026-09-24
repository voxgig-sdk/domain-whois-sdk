
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { DomainWhoisSDK } from '..'


describe('exists', async () => {

  test('test-mode', () => {
    const testsdk = DomainWhoisSDK.test()
    equal(testsdk instanceof DomainWhoisSDK, true,
      'DomainWhoisSDK.test() must return a client synchronously')
  })

})
