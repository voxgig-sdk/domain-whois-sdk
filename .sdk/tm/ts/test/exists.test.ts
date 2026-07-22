
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { DomainWhoisSDK } from '..'


describe('exists', async () => {

  test('test-mode', async () => {
    const testsdk = await DomainWhoisSDK.test()
    equal(null !== testsdk, true)
  })

})
