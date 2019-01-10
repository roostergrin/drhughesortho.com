const route = '//api-v2.roostertest2.com/wp-json'

const api = () => {
  try {
    return (document.location.protocol === 'https:' ? 'https://ssl' : 'http://') + route
  } catch (e) {
    return 'https://' + route
  }
}

export default api()
