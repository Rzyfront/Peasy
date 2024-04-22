import axios from 'axios'

const API_URL = 'https://hl.peasy.co/api'

export async function API(endpoint, method = 'GET', data = null, headers = {}) {
  try {
    const defaultHeaders = {
      Accept: 'application/json',
      'Content-Type': 'application/json', // Establece el tipo de contenido como JSON
      ...headers // Permite agregar o sobrescribir encabezados personalizados
    }

    const response = await axios({
      method,
      url: `${API_URL}/${endpoint}`,
      data,
      headers: defaultHeaders
    })

    if (response.status === 200) {
      return response.data
    } else {
      throw new Error(`Error al realizar la petición: ${response.status}`)
    }
  } catch (error) {
    console.error('Error en la función API:', error)
    // Maneja el error de forma adecuada (mostrar mensaje al usuario, etc.)
    return null
  }
}
