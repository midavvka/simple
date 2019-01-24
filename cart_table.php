      <table>
              <th> Наименование</th>
              <th> Цена</th>
              <th> Количество</th>
            <?php
            foreach ($results['cart'] as $item) {
              echo "<tr>
              <td> {$item['name']} </td>
              <td> {$item['price']} </td>
              <td> <input name=\"count\" type=\"number\" value=\"{$item['count']}\" aria-label=\"Search\" class=\"form-control\" style=\"width: 100px\"> </td>
              <td> <a href=\"?model=cart&delete={$item['id']}\"> Удалить </a> </td>
              </tr>";
            }

            ?>
            </table>

            <a href="?model=cart&clear"> Очистить корзину</a>
            